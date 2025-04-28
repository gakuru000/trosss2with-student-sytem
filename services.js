// src/components/Services.js
import React from "react";

function Services() {
  return (
    <section className="services">
      <div className="container">
        <h2>Our Services</h2>
        <div className="service-cards">
          <div className="card">
            <img src="/images/venue.jpg" alt="Venue Booking" />
            <h3>Venue Booking</h3>
            <p>Find the perfect location for your wedding ceremony and reception.</p>
          </div>
          <div className="card">
            <img src="/images/decoration.jpg" alt="Decoration & Setup" />
            <h3>Decoration &amp; Setup</h3>
            <p>Beautiful decoration ideas that suit your theme and style.</p>
          </div>
          <div className="card">
            <img src="/images/catering.jpg" alt="Catering" />
            <h3>Catering</h3>
            <p>Exquisite menus prepared to impress your guests.</p>
          </div>
          <div className="card">
            <img src="/images/photography.jpg" alt="Photography" />
            <h3>Photography</h3>
            <p>Capture every magical moment with our expert photographers.</p>
          </div>
        </div>
      </div>
    </section>
  );
}

export default Services;
