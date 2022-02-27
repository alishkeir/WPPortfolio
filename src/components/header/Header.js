import React from 'react';
import Logo from '../../assets/images/svg/logo.svg';

const Header = () => {
    return (
        <header>
            <div className='logo'>
                <img src={Logo} alt='' />
                <a href='/' className='header__logo'>
                    Ali Shkeir
                </a>
            </div>
            <nav className='nav' id='nav-menu'>
                <ion-icon
                    name='close-outline'
                    class='header__close'
                    id='close-menu'
                ></ion-icon>

                <ul className='nav__list'>
                    <li className='nav__item active'>
                        <a href='#home' className='nav__link'>
                            Home
                        </a>
                    </li>
                    <li className='nav__item'>
                        <a href='#about' className='nav__link'>
                            About
                        </a>
                    </li>
                    <li className='nav__item'>
                        <a href='#skills' className='nav__link'>
                            Skills
                        </a>
                    </li>
                    <li className='nav__item'>
                        <a href='#portfolio' className='nav__link'>
                            Portfolio
                        </a>
                    </li>
                    <li className='nav__item'>
                        <a href='#contact' className='nav__link'>
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            <ion-icon
                name='menu-outline'
                class='header__toggle'
                id='toggle-menu'
            ></ion-icon>
        </header>
    );
};

export default Header;
