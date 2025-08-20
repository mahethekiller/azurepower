<style>


    .map-container {
        position: relative;
        display: inline-block;
    }

    .map-container img {
        max-width: 100%;
        height: auto;
        display: block;
    }

    /* Marker pulse effect */
    .marker {
        position: absolute;
        width: 18px;
        height: 18px;
        background: #fff;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
    }

    .marker::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        top: 0;
        left: 0;
        background: rgba(255, 255, 255, 0.9);
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 0.7;
        }

        100% {
            transform: scale(2.5);
            opacity: 0;
        }
    }

    /* Tooltip styling */
    .tooltip {
        position: absolute;
        background: #127DC2;
        color: #fff;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 18px;
        white-space: nowrap;
        transform: translate(-50%, -120%);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .tooltip::after {
        content: "";
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 6px;
        border-style: solid;
        border-color: #127DC2 transparent transparent transparent;
    }

    .marker:hover .tooltip,
    .marker.active .tooltip {
        opacity: 1;
        transform: translate(-50%, -140%);
        pointer-events: auto;
    }

    .rajasthan {
        top: 36%;
        left: 20%;
    }

    .gujarat {
        top: 48%;
        left: 12%;
    }

    .karnataka {
        top: 77%;
        left: 25%;
    }

    .punjab {
        top: 22%;
        left: 26%;
    }

    .andhra-pradesh {
        top: 77%;
        left: 38%;
    }

    .telangana {
        top: 66%;
        left: 38%;
    }

    .uttarpradesh {
        top: 36%;
        left: 44%;
    }

    .assam {
        top: 36%;
        left: 86%;
    }

    .chhattisgarh {
        top: 56%;
        left: 46%;
    }

    .bihar {
        top: 39%;
        left: 61%;
    }

    .maharashtra {
        top: 61%;
        left: 24%;
    }

    .delhi {
        top: 29%;
        left: 32%;
    }





    /* right content */
    .kicker {
        font-size: 12px;
        letter-spacing: .12em;
        color: var(--muted);
        text-transform: uppercase;
        margin-bottom: 8px
    }

    h1 {
        font-size: 44px;
        line-height: 1.05;
        margin: 0 0 18px;
        font-weight: 700
    }

    p.lead {
        color: var(--muted);
        margin: 0 0 22px
    }

    .two-col {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px
    }

    .region {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .swatch {
        width: 14px;
        height: 14px;
        border-radius: 50px;
        margin-top: 5px
    }

    .region strong {
        display: block
    }

    .region span {
        display: block;
        color: var(--muted);
        font-size: 13px
    }

    .cta {
        margin-top: 20px
    }

    .btn {
        background: var(--accent);
        color: #09311a;
        padding: 14px 26px;
        border-radius: 6px;
        border: none;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 6px 18px rgba(127, 194, 65, 0.18)
    }


    /* responsive */
    @media (max-width:980px) {
        .wrap {
            grid-template-columns: 1fr;
            max-width: 900px
        }

        h1 {
            font-size: 32px
        }

        .two-col {
            grid-template-columns: 1fr
        }
    }
</style>
<!-- SVG Map -->
<div class="col-lg-6">
    <div class="w-full lg:w-1/2 flex justify-center items-center p-4">
    <div class="map-container">
      <!-- Map Image -->
      <img src="{{ asset('assets/img/India-Map-workout.png') }}" alt="India Map" />

      <!-- Example Markers (adjust top/left %) -->
      <div class="marker rajasthan">
        <div class="tooltip">Rajasthan : 1675 MW</div>
      </div>
      <div class="marker gujarat">
        <div class="tooltip">Gujarat : 270 MW</div>
      </div>
      <div class="marker karnataka">
        <div class="tooltip">Karnataka : 250 MW</div>
      </div>
      <div class="marker punjab">
        <div class="tooltip">Punjab : 214 MW</div>
      </div>
      <div class="marker andhra-pradesh">
        <div class="tooltip">Andhra Pradesh : 200 MW</div>
      </div>
      <div class="marker telangana">
        <div class="tooltip">Telangana : 100 MW</div>
      </div>
      <div class="marker uttarpradesh">
        <div class="tooltip">Uttar Pradesh : 100 MW</div>
      </div>
      <div class="marker assam">
        <div class="tooltip">Assam : 90 MW</div>
      </div>
      <div class="marker chhattisgarh">
        <div class="tooltip">Chhattisgarh : 30 MW</div>
      </div>
      <div class="marker bihar">
        <div class="tooltip">Bihar : 10 MW</div>
      </div>
      <div class="marker maharashtra">
        <div class="tooltip">Maharashtra : 7 MW</div>
      </div>
      <div class="marker delhi">
        <div class="tooltip">Delhi : 2 MW</div>
      </div>
    </div>

  </div>
</div>

<div class="col-lg-6">
   <div class="w-full lg:w-1/2 flex flex-col space-y-6">
    <h1>Over 4.1 GWs* Portfolio is <br>spread across India</h1>


    <div class="two-col" aria-hidden="false">
      <div>
        <div class="region">
          <div class="swatch" style="background:#ffc50a"></div>
          <div>
            <strong>Rajasthan</strong>
            <span>1675 MW</span>
          </div>
        </div>

        <div class="region">
          <div class="swatch" style="background:#d15578"></div>
          <div>
            <strong>Gujarat</strong>
            <span>270 MW</span>
          </div>
        </div>

        <div class="region">
          <div class="swatch" style="background:#ba6cfd"></div>
          <div>
            <strong>Karnataka</strong>
            <span>250 MW</span>
          </div>
        </div>
        <div class="region">
          <div class="swatch" style="background:#ab4b9d"></div>
          <div>
            <strong>Punjab</strong>
            <span>214 MW</span>
          </div>
        </div>

        <div class="region">
          <div class="swatch" style="background:#6c6807"></div>
          <div>
            <strong>Andhra Pradesh</strong>
            <span>200 MW</span>
          </div>
        </div>

        <div class="region">
          <div class="swatch" style="background:#01aaad"></div>
          <div>
            <strong>Telangana</strong>
            <span>100 MW</span>
          </div>
        </div>


        <div class="region">
          <div class="swatch" style="background:#d6d6d6"></div>
          <div>
            <strong>Others</strong>
            <span>93 MW</span>
          </div>
        </div>

      </div>


      <div>


        <div class="region">
          <div class="swatch" style="background:#ff813d"></div>
          <div>
            <strong>Uttar Pradesh</strong>
            <span>100 MW</span>
          </div>
        </div>


        <div class="region">
          <div class="swatch" style="background:#de58ff"></div>
          <div>
            <strong>Assam</strong>
            <span>90 MW</span>
          </div>
        </div>


        <div class="region">
          <div class="swatch" style="background:#39b54e"></div>
          <div>
            <strong>Chhattisgarh</strong>
            <span>30 MW</span>
          </div>
        </div>


        <div class="region">
          <div class="swatch" style="background:#2a4698"></div>
          <div>
            <strong>Bihar</strong>
            <span>10 MW</span>
          </div>
        </div>


        <div class="region">
          <div class="swatch" style="background:#f15a23"></div>
          <div>
            <strong>Maharashtra</strong>
            <span>7 MW</span>
          </div>
        </div>

        <div class="region">
          <div class="swatch" style="background:#abde5d"></div>
          <div>
            <strong>Delhi</strong>
            <span>2 MW</span>
          </div>
        </div>



        <div class="region">
          <div class="swatch" style="background:#d6d6d6"></div>
          <div>
            <strong>Contracted & Awarded (LOA issued + PPA signed)</strong>
            <span>1087 MW**</span>
          </div>
        </div>
      </div>
    </div>


    <div class="cta">
      <button class="btn-default align-items-center text-center" href="#">View Projects</button>
    </div>
  </div>
</div>


  <script>
    // Allow click to "lock" tooltip open
    document.querySelectorAll(".marker").forEach(marker => {
      marker.addEventListener("click", () => {
        marker.classList.toggle("active");
      });
    });
  </script>
