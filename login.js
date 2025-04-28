// src/components/Login.js
import React, { useState } from "react";
import { useNavigate, Link } from "react-router-dom";

function Login() {
  const navigate = useNavigate();
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleLogin = (e) => {
    e.preventDefault();
    // For demo: if password equals 'password123', simulate successful login
    if (email && password === "password123") {
      localStorage.setItem("userEmail", email);
      const isVerified = localStorage.getItem("isVerified");
      if (isVerified === "true") {
        navigate("/dashboard");
      } else {
        navigate("/email-confirmation");
      }
    } else {
      alert("Invalid credentials.");
    }
  };

  return (
    <div className="auth-container">
      <h2>Login</h2>
      <form onSubmit={handleLogin}>
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
            placeholder="Enter your password"
            onChange={(e) => setPassword(e.target.value)}
            required
          />
        </div>
        <button type="submit" className="btn">Login</button>
      </form>
      <p>
        Don't have an account? <Link to="/signup">Sign Up Here</Link>
      </p>
    </div>
  );
}

export default Login;
