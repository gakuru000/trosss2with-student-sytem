// src/components/Contact.js
import React, { useState } from "react";

function Contact() {
  const [contactName, setContactName] = useState("");
  const [contactEmail, setContactEmail] = useState("");
  const [message, setMessage] = useState("");

  const handleContactSubmit = (e) => {
    e.preventDefault();
    alert("Thank you! Your message has been sent.");
    // Normally send the message to an API
    setContactName("");
    setContactEmail("");
    setMessage("");
  };

  return (
    <section className="contact">
      <div className="container">
        <h2>Contact Us</h2>
        <form onSubmit={handleContactSubmit} className="contact-form">
          <div className="form-group">
            <label>Your Name</label>
            <input
              type="text"
              value={contactName}
              onChange={(e) => setContactName(e.target.value)}
              placeholder="Your Name"
              required
            />
          </div>
          <div className="form-group">
            <label>Your Email</label>
            <input
              type="email"
              value={contactEmail}
              onChange={(e) => setContactEmail(e.target.value)}
              placeholder="example@domain.com"
              required
            />
          </div>
          <div className="form-group">
            <label>Message</label>
            <textarea
              value={message}
              onChange={(e) => setMessage(e.target.value)}
              placeholder="Your Message"
              required
            ></textarea>
          </div>
          <button type="submit" className="btn">
            Send Message
          </button>
        </form>
      </div>
    </section>
  );
}

export default Contact;
