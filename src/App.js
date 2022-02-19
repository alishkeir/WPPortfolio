import Header from './components/header/Header';
import {
    BrowserRouter as Router,
    Redirect,
    Route,
    Routes,
} from 'react-router-dom';

import './assets/js/script';
import './assets/scss/style.scss';
import Home from './pages/home/Home';

function App() {
    return (
        <Router>
            <Header />
            <Routes>
                <Route exact={true} path='/' element={<Home />} />
            </Routes>
        </Router>
    );
}

export default App;
