import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { Button, Card } from 'react-bootstrap';

const HomeCarditems = () => {
    const [foods, setFoods] = useState([]);

    useEffect(() => {
        axios.get("https://www.fakerestapi.com/datasets/api/v1/clean-recipes-dataset.json")
            .then(res => {
                console.log(res.data.data);
                setFoods(res.data.data);

            }).catch(err => {
                console.log(err);
            });
    }, []);
    return (
        <div>
            <Card>
                {
                    foods.map(food => (
                        <Card style={{ width: '18rem', border: '1px solid black' }}  >
                            {/* <Card.Img variant="top" src={require(food.recipe_image)} /> */}
                            <Card.Body >
                                <Card.Title>{food.title}</Card.Title>
                                <Card.Text>
                                    {food.chef_name}<br />
                                    {food.cooking_time}<br />
                                    {food.total_ratings}<br />
                                </Card.Text>

                            </Card.Body>
                        </Card>
                    ))
                }
            </Card>

        </div>
    );
};

export default HomeCarditems;