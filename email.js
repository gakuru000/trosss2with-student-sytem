// src/components/EmailConfirmation.js
import React from "react";
import { useNavigate } from "react-router-dom";

function EmailConfirmation() {
  const navigate = useNavigate();

  const handleConfirmEmail = () => {
    // Simulate email confirmation: mark the user as verified.
    localStorage.setItem("isVerified", "true");
    navigate("/dashboard");
  };

  const handleResendEmail = () => {
    alert("A new confirmation email has been sent!");
    // In a real application, trigger email sending from your API.
  };

  return (
    <div className="auth-container">
      <h2>Email Confirmation</h2>
      <p>
        A confirmation email has been sent to your registered email address.
      </p>
      <p>Please click the button below to confirm your email.</p>
      <button className="btn" onClick={handleConfirmEmail}>
        Confirm Email
      </button>
      <p>
        Didn't receive an email?{" "}
        <button className="btn btn-link" onClick={handleResendEmail}>
          Resend Email
        </button>
      </p>
    </div>
  );
}

export default EmailConfirmation;
