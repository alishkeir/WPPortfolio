import Header from './components/header/Header';
import {
    BrowserRouter as Router,
    Redirect,
    Route,
    Routes,
    Switch,
} from 'react-router-dom';

import './assets/js/script';
import './assets/scss/style.scss';
import Home from './pages/home/Home';

function App() {
    return (
        <Router pathname='/'>
            <Header />
            <Routes>
                <Route path='/' element={<Home />} />
                <Route path='/games' element={<Home />} />
            </Routes>
        </Router>
    );
}

export default App;
