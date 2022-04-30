import axios from 'axios';
import React, { useEffect, useState } from 'react';

const UserDelete = () => {
    const [userListDelete, setUserListDelete] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/userList", {

            headers: {
                'content-type': 'application/json',
            },
            body: JSON.stringify()
        })
            .then(res => {
                console.log(res.data);
                setUserListDelete(res.data);
            }).catch(err => {
                console.log(err);
            });
    }, []);
    return (
        <div>
            {
                userListDelete.map(userListDelete => (

                    <tr>
                        <td>{userListDelete.id}</td>




                    </tr>
                ))
            }
        </div>
    );
};

export default UserDelete;