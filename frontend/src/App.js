import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Home from './components/Home';
import SurveyForm from './components/SurveyForm';
import SurveyResults from './components/SurveyResults';

const App = () => (
  <Router>
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/survey" element={<SurveyForm />} />
      <Route path="/results" element={<SurveyResults />} />
    </Routes>
  </Router>
);

export default App;
