import logo from './logo.svg';
import './App.css';

import { BrowserRouter as Router, Routes, Route }
    from 'react-router-dom';

import General from './pages';
import One from './pages/One';
import Two from './pages/Two';
import Three from './pages/Three';
import Four from './pages/Four';

import Button from './Components/Button/Button'
import Navbar from './pages';

function App() {
  return (
    <Router>
        <Navbar />
        <Routes>
            <Route exact path='/' exact element={<General />} />
            <Route path='/one' element={<One />} />
            <Route path='/two' element={<Two />} />
            <Route path='/three' element={<Three />} />
            <Route path='/four' element={<Four />} />
        </Routes>
        
        {/* <Button /> */}
    </Router>
);
}

export default App;