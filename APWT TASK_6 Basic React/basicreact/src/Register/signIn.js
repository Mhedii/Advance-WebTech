import React, { useEffect, useState } from "react";
import { useForm } from "react-hook-form";
import useFirebase from "../Hook/useFirebase";
import "./Register.css"
import Header from "../Pages/Header/Header";
import { Form, Button } from "react-bootstrap";
import axios from "axios";
import { NavLink } from "react-router-dom";

const SignIn = () => {
    const { saveUser, handleGoogleLogin } = useFirebase();
    const { register, handleSubmit } = useForm();

    const Submit = (user) => {
        //handleUserRegister(user.name, user.email, user.address, user.dob, user.password, user.phone);
        saveUser(user.name, user.email);


        console.log(user);
    };
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [signin, setSignIn] = useState('');


    const [employeeDetails, setemployeeDetails] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/login", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                setSignIn(res.data);
            }).catch(err => {
                console.log(err);
            });
    }, []);

    const handleEmail = e => {
        setEmail(e.target.value);
    }
    const handlePassword = e => {
        setPassword(e.target.value);
    }



    return (
        <div>
            <Header />
            <Form className="container mt-5" onSubmit="">

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


                <input
                    className="submit-btn btn btn-danger mt-3"
                    type="submit"
                    value="Login"
                // onClick={{if(handleEmail==signin.email && handlePassword==signin.password)}

                />

                <br />
                <br />

                <button onClick={handleGoogleLogin} className="bg-warning " style={{ borderRadius: "8px" }}> Google Sign In</button><br />

                <p className="Already-account m-3">Don't have an Account? <NavLink to="/registration" className="">Sign up </NavLink></p>

            </Form>


        </div >
    );
};

export default SignIn;
