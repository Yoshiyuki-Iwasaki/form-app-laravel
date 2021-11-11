import React from 'react';
import {Route, Routes} from 'react-router-dom';
import GlobalNav from './GlobalNav';
import Top from './Top';
import About from './About';


const App = () => {
    return (
        <>
            <GlobalNav />
            <Routes>
                <Route path="/" element={<Top/>} />
                <Route path="/about" element={<About/>} />
            </Routes>
        </>
    )
}

export default App;
