import React, { useEffect } from 'react';
import Video from '../../assets/temp/rain.mp4';
import Aos from 'aos';
import GameCard from '../../components/game-card/GameCard';

const Home = () => {
    useEffect(() => {
        Aos.init({ duration: 700 });
    }, []);

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
                    <h2>About Me!</h2>
                    <p data-aos='fade-left'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Rem iste obcaecati tempore, ducimus autem sapiente
                        impedit quasi doloribus amet doloremque adipisci
                        aspernatur enim nemo aliquid maiores illum accusamus
                        magni nobis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Rem iste obcaecati tempore, ducimus autem sapiente
                        impedit quasi doloribus amet doloremque adipisci
                        aspernatur enim nemo aliquid maiores illum accusamus
                        magni nobis.
                    </p>
                </div>
            </section>
            <section className='section games' id='games'>
                <div className='shell'>
                    <div className='game-cards-container'>
                        <div className='game-cards-flex'>
                            <GameCard index={0} />
                            <GameCard index={1} />
                            <GameCard index={2} />
                            <GameCard index={3} />
                            <GameCard index={4} />
                            <GameCard index={5} />
                            <GameCard index={6} />
                            <GameCard index={7} />
                            <GameCard index={8} />
                            <GameCard index={9} />
                            <GameCard index={10} />
                            <GameCard index={11} />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default Home;
