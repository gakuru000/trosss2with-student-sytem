// src/components/Navigation.js
import React from "react";
import { Link } from "react-router-dom";

function Navigation() {
  return (
    <header className="nav-header">
      <div className="nav-container">
        <h1 className="brand">
          <Link to="/">THE TROSS GROUP</Link>
        </h1>
        <nav>
          <ul className="nav-links">
            <li><Link to="/">Home</Link></li>
            <li><Link to="/services">Services</Link></li>
            <li><Link to="/booking">Booking</Link></li>
            <li><Link to="/about">About</Link></li>
            <li><Link to="/contact">Contact</Link></li>
            <li><Link to="/login">Login</Link></li>
            <li><Link to="/signup">Sign Up</Link></li>
          </ul>
        </nav>
      </div>
    </header>
  );
}

export default Navigation;
