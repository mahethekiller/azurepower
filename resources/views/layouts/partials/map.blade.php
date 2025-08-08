
    <style>


        #map {
            width: 100%;
            height: 100vh;
            border-right: 1px solid #ccc;
        }

        .state-list {
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            overflow-y: auto;
            max-height: 100vh;
        }

        .state-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background: #f9f9f9;
            cursor: pointer;
            transition: background 0.3s;
        }

        .state-list li:hover,
        .state-list li.active {
            background: #e0f7fa;
        }

        svg path {
            fill: #ccc;
            stroke: #333;
            stroke-width: 0.5;
            transition: fill 0.3s;
            cursor: pointer;
        }

        svg path:hover,
        svg path.active {
            fill: #4caf50;
        }
    </style>
    <!-- SVG Map -->
    <div class="col-lg-8">
    <svg id="map" viewBox="0 0 800 800"></svg>
    </div>

    <div class="col-lg-4">
    <!-- State List -->
    <ul class="state-list" id="stateList"></ul>
     </div>
