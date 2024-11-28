import React from 'react';
import { Link } from 'react-router-dom';

const Home = () => (
  <div className="flex flex-col items-center justify-center h-screen">
    <h1 className="text-3xl font-bold mb-4">Survey Application</h1>
    <Link to="/survey" className="btn btn-primary mb-2">Fill Out Survey</Link>
    <Link to="/results" className="btn btn-secondary">View Results</Link>
  </div>
);

export default Home;
