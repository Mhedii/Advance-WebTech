import React from 'react';
import HomeCarditems from './HomeCarditems';

const Home = () => {



    return (
        <div>
            <h1>Calling data from api</h1>

            <HomeCarditems />

            {/* {
                foods.map(food => (
                    <Post userId={post.userId} title={post.title} key={post.id}></Post>
                ))
            } */}

        </div>
    );
};

export default Home;