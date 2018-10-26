<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Client;
use App\Http\Resources\Client as ClientResource;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Client
        $clients = Client::paginate(15);


        //return collection of Clients as a resource
        return ClientResource::collection($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = $request->isMethod('put')?Client::findOrFail
        ($request->client_id) : new Client;

        $client->id= $request->input('client_id');
        $client->firstName= $request->input('firstName');
        $client->lastName= $request->input('lastName');
        $client->username= $request->input('username');
        $client->password= Hash::make($request->input('password'));
        $client->emailAddress= $request->input('emailAddress');
        $client->phoneNumber= $request->input('phoneNumber');
        $client->dateOfBirth= $request->input('dateOfBirth');
        $client->homeTown= $request->input('homeTown');

        if($client->save()){

            $client["success"]=true;
            echo json_encode($client);
            //return new ClientResource($client);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username,$password)
    {
        //show individual info
        $EntUserName = Client::select('username')->where('username',$username)->get();

        if (count($EntUserName) == 0){
            echo "Username do not match any record";
        }
        $clientPassword = Client::select('password')->where('username',$username)->get();
        //return $clientPassword[0]->password;
        $pass=$clientPassword[0]->password;

        $validPassword = password_verify($password,$pass);
        //return clientInfo as a resource
        if($validPassword){
            $client ["username"]=$username;
            $client["password"] = $validPassword;
            $client["success"]=true;

            echo json_encode($client);

            // return new ClientResource($client);
        }else{
            echo "Incorrect Password ";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find individual info
        $client = Client::findOrFail($id);

        //return clientInfo as a resource
        if ($client->delete()){
            return new ClientResource($client);
        }

    }
}
