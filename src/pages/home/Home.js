import React, { useEffect } from 'react';
import Video from '../../assets/temp/rain.mp4';
import Aos from 'aos';

const Home = () => {
    useEffect(() => {
        Aos.init({ duration: 700 });
    }, []);

    return (
        <div className='wrapper'>
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

            <div className='about'>
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
            </div>
        </div>
    );
};

export default Home;
