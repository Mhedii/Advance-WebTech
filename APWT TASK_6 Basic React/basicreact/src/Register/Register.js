import React, { useState } from "react";
import { useForm } from "react-hook-form";
import useFirebase from "../Hook/useFirebase";
import "./Register.css"
import Header from "../Pages/Header/Header";
import { Form, Button } from "react-bootstrap";
import axios from "axios";
import { NavLink } from "react-router-dom";

const Register = () => {
    const { saveUser } = useFirebase();
    const { register, handleSubmit } = useForm();

    const Submit = (user) => {
        //handleUserRegister(user.name, user.email, user.address, user.dob, user.password, user.phone);
        saveUser(user.name, user.email, user.address, user.dob, user.password, user.phone);


        console.log(user);
    };
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [name, setName] = useState('');
    const [phone, setPhone] = useState('');
    const [address, setAddress] = useState('');
    const [dob, setDob] = useState('');

    const handleEmailSignIn = e => {
        e.preventDefault();

        const users = { name, email, address, dob, password, phone };
        console.log(users);

        axios.post("http://127.0.0.1:8000/api/signup", users, {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify(users)
        }
        )
            .then(result => {
                console.log(result);
            }).catch(err => {

                console.log(err);
            });
    }


    const handleEmail = e => {
        setEmail(e.target.value);
    }
    const handlePassword = e => {
        setPassword(e.target.value);
    }
    const handleName = e => {
        setName(e.target.value);
    }
    const handleDob = e => {
        setDob(e.target.value);
    }
    const handlePhone = e => {
        setPhone(e.target.value);
    }
    const handleAddress = e => {
        setAddress(e.target.value);
    }


    return (
        <div>
            <Header />
            <Form className="container mt-5" onSubmit={handleEmailSignIn}>
                <Form.Group className="mb-3 row" controlId="name">
                    <Form.Label className="me-3 col justify-content-end align-items-end">Name</Form.Label>
                    <Form.Control type="text" className="col" onChange={handleName} placeholder="Enter your name" name="name" />
                    <div className="col-lg-2"></div>
                </Form.Group>
                <Form.Group className="mb-3 row " controlId="email">
                    <Form.Label className="me-3 col">Email address</Form.Label>
                    <Form.Control type="email" className="col" onChange={handleEmail} placeholder="Enter your email" name="email" />
                    <div className="col-lg-2"></div>

                </Form.Group>

                <Form.Group className="mb-3 row" controlId="password">
                    <Form.Label className="me-3 col">Password</Form.Label>
                    <Form.Control type="password" className="col" onChange={handlePassword} placeholder="Password" name="password" />
                    <div className="col-lg-2"></div>
                </Form.Group>

                <Form.Group className="mb-3 row" controlId="address">
                    <Form.Label className="me-3 col">Address</Form.Label>
                    <Form.Control type="text" className="col" onChange={handleAddress} placeholder="Enter your address" name="address" />
                    <div className="col-lg-2"></div>
                </Form.Group>

                <Form.Group className="mb-3 row" controlId="phone">
                    <Form.Label className="me-3 col">Phone</Form.Label>
                    <Form.Control type="text" className="col" onChange={handlePhone} placeholder="Enter Your Phone Number" name="phone" />
                    <div className="col-lg-2"></div>
                </Form.Group>

                <Form.Group className="mb-3 row" controlId="dob">
                    <Form.Label className="me-3 col">Date Of Birth</Form.Label>
                    <Form.Control className="col" type="date" onChange={handleDob} placeholder="Enter your date of birth" name="dob" />
                    <div className="col-lg-2"></div>
                </Form.Group>


                {/* <Button variant="primary" type="submit" onSubmit={handleSubmit}>
                    Submit
                </Button> */}
                <input
                    className="submit-btn btn btn-danger mt-3"
                    type="submit"
                    value="Register"

                /> <br />

                <p className="Already-account m-3">Already have an Account? <NavLink to="/login" className="">Login </NavLink></p>

            </Form>

            {/* <p>Already have an account?<Link to="/login">Login</Link> </p> */}
            {/* <form onSubmit={handleSubmit(onSubmit)}>

                <input
                    className="input-field"
                    name="displayName"
                    placeholder="Name"
                    type="text"
                    {...register("displayName", { required: true })}
                />
                <br />
                <input
                    className="input-field"
                    name="email"
                    placeholder="Email"
                    type="email"
                    {...register("email", { required: true })}
                />
                <br />
                <input
                    className="input-field"
                    name="phone"
                    type="text"
                    {...register("phone", { required: true })}
                />
                <br />
                <input
                    className="input-field"
                    name="password"
                    type="password"
                    placeholder="Password"
                    {...register("password", { required: true })}
                />
                <br />

                <input
                    className="submit-btn btn btn-danger mt-3"
                    type="submit"
                    value="Register"

                />
            </form> */}
        </div >
    );
};

export default Register;
