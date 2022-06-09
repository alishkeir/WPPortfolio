import React, { useEffect } from 'react';
import Video from '../../assets/temp/rain.mp4';
import Aos from 'aos';
import GameCard from '../../components/game-card/GameCard';
import axios from 'axios';

const Home = () => {
    useEffect(() => {
        Aos.init({ duration: 700 });
    }, []);

    axios
        .get('/src/assets/json/data.json')
        .then((res) => {
            console.log(res);
        })
        .catch((err) => {
            console.log(err);
        });

    return (
        <div className='wrapper' id='home'>
            <div className='hero' id='hero'>
                <video autoPlay muted loop className='hero-video'>
                    <source src={Video} type='video/mp4' />
                </video>
                <div className='scroll' id='scroll-container'>
                    <div className='scroll-mouse'>
                        <div className='scroll-scroller'></div>
                    </div>
                </div>
            </div>

            <section className='section about' id='about'>
                <div className='shell'>
                    <h2 data-aos='fade-in'>About Me!</h2>
                    <p data-aos='fade-left'>
                        Since I was seven years old, I was always willing to
                        learn and create computer games. As for now, my main
                        goal is to become a professional Gameplay Programmer as
                        I am passionate about gaming and the game industry.
                    </p>
                    <p data-aos='fade-right'>
                        My purpose was to become a self-taught programmer since
                        I couldn't get a university degree. So I chose the
                        easiest path, and that is to become a web developer. And
                        now, as I am working as a web developer, I am learning
                        how to code in C++ and Unreal Engine to become a
                        successful Gameplay Programmer.
                    </p>

                    <hr />
                </div>
            </section>
            <section className='section games' id='games'>
                <div className='shell'>
                    <div className='section--header'>
                        <h2 data-aos='fade-in'>My Portfolio</h2>
                    </div>
                    <div className='game-cards-container'>
                        <div className='game-cards-flex'>
                            <GameCard
                                index={0}
                                title='Castle Hunt'
                                description='A Simple Platform Melee Game for PC'
                                image={require('../../assets/images/temp/CH.png')}
                                class='light'
                                opacity='0.1'
                            />
                            <GameCard
                                index={1}
                                title='Fruit VR'
                                description='"Fruit Ninja" like game targeting the Oculus Quest 2'
                                image={require('../../assets/images/temp/FNVR.jpg')}
                                class='light'
                                opacity='0.5'
                            />
                            <GameCard index={2} />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default Home;
