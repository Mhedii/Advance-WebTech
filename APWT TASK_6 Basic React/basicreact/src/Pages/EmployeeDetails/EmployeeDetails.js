import axios from 'axios';
import React, { useEffect, useState } from 'react';
import Header from '../Header/Header';


const EmployeeDetails = () => {


    const [employeeDetails, setemployeeDetails] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/employeeDetails", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                setemployeeDetails(res.data);
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

            <table className="table table-border container" style={{ backgroundColor: "#e3f2fd" }}>
                <tr>

                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Role</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Action</th>


                </tr>
                {
                    employeeDetails.map(employeeDetails => (
                        // <Post userId={post.userId} title={post.title} key={post.id}></Post>
                        <tr>
                            <td>{employeeDetails.id}</td>
                            <td>{employeeDetails.name}</td>
                            <td>{employeeDetails.email}</td>
                            <td>{employeeDetails.role}</td>
                            <td>{employeeDetails.salary}</td>
                            <td>{employeeDetails.bonus}</td>


                            {/* <td><a href="/userEdit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                    <td><a href="/userDelete/{{$user->id}}/{{$user->name}}">delete</a></td> */}
                            <div>
                                <button className='Button bg-primary p-1'>Edit</button>
                                <button className='Button bg-danger p-1'>Delete</button>
                            </div>
                        </tr>
                    ))
                }




            </table>

        </div>
    );
};

export default EmployeeDetails;