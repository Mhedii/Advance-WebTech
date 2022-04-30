import axios from 'axios';
import React, { useEffect, useState } from 'react';
import Header from '../Header/Header';


const ProductDetails = () => {


    const [productDetails, setproductDetails] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/productDetails", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                setproductDetails(res.data);
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

                    <th>
                        Product ID</th>
                    <th>Product Name</th>
                    <th>Our Cost</th>
                    <th>Selling Cost</th>
                    <th>Amount</th>
                    <th>Total Our Cost</th>
                    <th>Total Sale</th>
                    <th>Profit</th>

                </tr>
                {
                    productDetails.map(productDetails => (
                        // <Post userId={post.userId} title={post.title} key={post.id}></Post>
                        <tr>
                            <td>{productDetails.id}</td>
                            <td>{productDetails.p_name}</td>
                            <td>{productDetails.ourCost}</td>
                            <td>{productDetails.sellingCost}</td>
                            <td>{productDetails.amount}</td>
                            <td>{productDetails.totalourCost}</td>
                            <td>{productDetails.totalsale}</td>
                            <td>{productDetails.profit}</td>

                            {/* <td><a href="/userEdit/{{$user->id}}/{{$user->name}}">Edit</a></td>
                    <td><a href="/userDelete/{{$user->id}}/{{$user->name}}">delete</a></td> */}
                            {/* <div>
                                <button className='Button bg-primary p-1'>Edit</button>
                                <button className='Button bg-danger p-1'>Delete</button>
                            </div> */}
                        </tr>
                    ))
                }




            </table>

        </div>
    );
};

export default ProductDetails;