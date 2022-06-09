import React from 'react';

const GameCard = (props) => {
    console.log(props);

    var className = '';
    if (props.class) {
        className = props.class;
    }
    return (
        <div
            className={`game-card ${className}`}
            data-aos='zoom-in-up'
            data-aos-duration={props.index * 100}
        >
            <div className='game-content'>
                <div className='game-header'>
                    <img src={props.image} alt='' />
                </div>
                <div className='game-subheader'>
                    <h3>{props.title}</h3>
                </div>
                <div className='game-body'>
                    <p>{props.description}</p>

                    <div className='technologies'>
                        <span className='technology cpp'>C++</span>
                        <span className='technology unreal'>UE4</span>
                        <span className='technology blueprint'>Blueprints</span>
                    </div>
                </div>

                <div className='game-footer'>
                    <a className='link youtube' href={props.youtube}>
                        Watch on YouTube
                    </a>
                    <a className='link github' href={props.github}>
                        View on GitHub
                    </a>
                </div>
            </div>
        </div>
    );
};

export default GameCard;
