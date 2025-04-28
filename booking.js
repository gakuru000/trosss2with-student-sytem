// src/components/Booking.js
import React, { useState } from "react";

function Booking() {
  const [fullName, setFullName] = useState("");
  const [email, setEmail] = useState("");
  const [service, setService] = useState("venue");
  const [date, setDate] = useState("");

  const handleBooking = (e) => {
    e.preventDefault();
    alert("Thank you! Your booking inquiry has been submitted.");
    // Here you would normally send booking data to a backend API
    setFullName("");
    setEmail("");
    setService("venue");
    setDate("");
  };

  return (
    <section className="booking">
      <div className="container">
        <h2>Book a Consultation</h2>
        <form onSubmit={handleBooking} className="booking-form">
          <div className="form-group">
            <label>Full Name</label>
            <input
              type="text"
              value={fullName}
              onChange={(e) => setFullName(e.target.value)}
              placeholder="Your Full Name"
              required
            />
          </div>
          <div className="form-group">
            <label>Email</label>
            <input
              type="email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              placeholder="example@domain.com"
              required
            />
          </div>
          <div className="form-group">
            <label>Select Service</label>
            <select value={service} onChange={(e) => setService(e.target.value)}>
              <option value="venue">Venue Booking</option>
              <option value="decoration">Decoration &amp; Setup</option>
              <option value="catering">Catering</option>
              <option value="photography">Photography</option>
            </select>
          </div>
          <div className="form-group">
            <label>Preferred Date</label>
            <input
              type="date"
              value={date}
              onChange={(e) => setDate(e.target.value)}
              required
            />
          </div>
          <button type="submit" className="btn">
            Submit Booking
          </button>
        </form>
      </div>
    </section>
  );
}

export default Booking;
