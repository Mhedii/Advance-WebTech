import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { NavLink } from 'react-router-dom';
import Header from '../Header/Header';
import "./UserList.css"
const UserList = () => {


    const [userList, setUserList] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/userList", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                setUserList(res.data);
            }).catch(err => {
                console.log(err);
            });
    }, []);
    return (
        <div>
            <Header />
            {/* <table class="table caption-top">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>phone</td>
                        <td>address</td>
                        <td>dob</td>
                        <div>
                            <button className='Button bg-primary'>Edit</button>
                            <button className='Button bg-danger'>Delete</button>
                        </div>
                    </tr>

                </tbody>
            </table> */}

            <table className="table table-border " style={{ backgroundColor: "#e3f2fd" }}>
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Action</th>

                </tr>
                {
                    userList.map(userList => (
                        // <Post userId={post.userId} title={post.title} key={post.id}></Post>
                        <tr>
                            <td>{userList.id}</td>
                            <td>{userList.name}</td>
                            <td>{userList.email}</td>
                            <td>{userList.phone}</td>
                            <td>{userList.address}</td>
                            <td>{userList.dob}</td>

                            {/* <td><a href="/userEdit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                    <td><a href="/userDelete/{{$user->id}}/{{$user->name}}">delete</a></td> */}
                            <div>
                                <NavLink to="/userEdit/:id/:name" className=""><button className='Button bg-primary p-1' >Edit</button></NavLink>
                                <NavLink to="/userDelete/:id/:name" className=""><button className='Button bg-danger p-1'>Delete</button></NavLink>


                            </div>
                        </tr>
                    ))
                }




            </table>

        </div>
    );
};

export default UserList;