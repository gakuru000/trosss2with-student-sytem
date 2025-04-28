// src/components/Dashboard.js
import React from "react";
import { useNavigate, Link } from "react-router-dom";

function Dashboard() {
  const navigate = useNavigate();
  const email = localStorage.getItem("userEmail") || "User";

  const handleLogout = () => {
    localStorage.clear();
    navigate("/login");
  };

  return (
    <div className="dashboard-container">
      <header>
        <h1>Welcome, {email}!</h1>
        <nav className="dashboard-nav">
          <Link className="btn" to="/dashboard?tab=myBookings">
            My Bookings
          </Link>
          <Link className="btn" to="/dashboard?tab=accountSettings">
            Account Settings
          </Link>
          <button className="btn" onClick={handleLogout}>
            Logout
          </button>
        </nav>
      </header>
      <main>
        <h2>Your Dashboard</h2>
        <p>This is your dashboard. More features coming soon!</p>
      </main