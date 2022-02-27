import React from 'react';

const GameCard = (props) => {
    return (
        <div
            className='game-card'
            data-aos='zoom-in-up'
            data-aos-delay={props.index * 100}
        >
            <div className='game-content'>
                <div className='game-header'>
                    <h3>Lorem Ipsum</h3>
                </div>
                <div className='game-body'>
                    <p>
                        Anim fugiat sit commodo in excepteur proident occaecat
                        amet sint aliqua nisi aliqua aute.
                    </p>
                    <a href='##'>View Details</a>
                </div>

                <div className='game-footer'>
                    <span className='technology cpp'>C++</span>
                    <span className='technology unreal'>UE4</span>
                </div>
            </div>

            <img
                src='https://media.giphy.com/media/13Vb4FWqXtjP3y/giphy.gif'
                alt=''
            />
        </div>
    );
};

export default GameCard;
