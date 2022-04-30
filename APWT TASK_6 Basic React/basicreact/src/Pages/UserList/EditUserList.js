import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import Header from '../Header/Header';

const EditUserList = () => {

    const [editUserList, seteditUserList] = useState([]);
    const { id } = useParams();
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/userEdit/:id/:name", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                seteditUserList(res.data);
            }).catch(err => {
                console.log(err);
            });
    }, []);
    const editSubmit = () => {
        axios.put("http://127.0.0.1:8000/api/userEdit", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                seteditUserList(res.data);
            }).catch(err => {
                console.log(err);
            });
    };
    return (
        <div>
            <Header />
            <h2>Edit User</h2>
            <form className="container form-group " onSubmit={editSubmit} >


                <div className="col-md-4  form-group" style={{ marginLeft: "420px" }}>
                    <span>ID</span>
                    <input type="text" name="id" value={editUserList.id} class="form-control" readonly />

                    {/* <span class="text-danger">{{$message}}</span> */}

                </div>
                <div class="col-md-4 form-group" style={{ marginLeft: "420px" }}>
                    <span>Name</span>
                    <input type="text" name="name" value={editUserList.name} class="form-control" />

                    {/* <span class="text-danger">{{$message}}</span> */}

                </div>


                <div class="col-md-4 form-group" style={{ marginLeft: "420px" }}>
                    <span>Email</span>
                    <input type="text" name="email" value={editUserList.email} class="form-control" />
                </div>

                <div class="col-md-4 form-group" style={{ marginLeft: "420px" }}>
                    <span>phone</span>
                    <input type="text" name="phone" value={editUserList.phone} class="form-control" />
                </div>
                <div class="col-md-4 form-group" style={{ marginLeft: "420px" }}>
                    <span>Address</span>
                    <input type="text" name="address" value={editUserList.address} class="form-control" />
                </div>

                <input type="submit" className=" btn btn-success mt-4" value="Edit" />
            </form>
        </div>
    );
};

export default EditUserList;