// src/components/Home.js
import React from "react";
import { useNavigate } from "react-router-dom";

function Home() {
  const navigate = useNavigate();

  const handleServiceClick = () => {
    navigate("/services");
  };

  return (
    <section className="hero">
      <div className="hero-content">
        <h2>Welcome to THE TROSS GROUP</h2>
        <p>We create unforgettable experiences for your special day.</p>
        <button className="btn" onClick={handleServiceClick}>
          Discover Our Services
        </button>
      </div>
    </section>
  );
}

export default Home;
