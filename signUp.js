// src/components/Signup.js
import React, { useState } from "react";
import { useNavigate, Link } from "react-router-dom";

function Signup() {
  const navigate = useNavigate();
  const [username, setUsername] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleSignup = (e) => {
    e.preventDefault();
    // For demo, save email and mark as unverified in localStorage
    localStorage.setItem("userEmail", email);
    localStorage.setItem("isVerified", "false");
    // In a real application, register the user via an API and send a confirmation email.
    navigate("/email-confirmation");
  };

  return (
    <div className="auth-container">
      <h2>Sign Up</h2>
      <form onSubmit={handleSignup}>
        <div className="form-group">
          <label>Full Name:</label>
          <input
            type="text"
            value={username}
            placeholder="Your full name"
            onChange={(e) => setUsername(e.target.value)}
            required
          />
        </div>
        <div className="form-group">
          <label>Email:</label>
          <input
            type="email"
            value={email}
            placeholder="Enter your email"
            onChange={(e) => setEmail(e.target.value)}
            required
          />
        </div>
        <div className="form-group">
          <label>Password:</label>
          <input
            type="password"
            value={password}
            placeholder="Create a password"
            onChange={(e) => setPassword(e.target.value)}
            required
          />
        </div>
        <button type="submit" className="btn">Sign Up</button>
      </form>
      <p>
        Already have an account? <Link to="/login">Login Here</Link>
      </p>
    </div>
  );
}

export default Signup;
