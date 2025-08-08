$(".owl-carousel").owlCarousel({
    stagePadding: 50,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    margin: 40,
    nav: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 2,
        },
    },
});

const width = 800,
    height = 800;

const svg = d3.select("#map");

const projection = d3
    .geoMercator()
    .center([80, 22]) // approximate center of India
    .scale(1000)
    .translate([width / 2, height / 2]);

const pathGenerator = d3.geoPath().projection(projection);
console.log(assetsurl);


// Load your GeoJSON
d3.json(assetsurl+"/india_states.geojson").then((geojson) => {
    // Draw states on SVG
    svg.selectAll("path")
        .data(geojson.features)
        .enter()
        .append("path")
        .attr("d", pathGenerator)
        .attr("id", (d) => d.properties.NAME_1.replace(/\s+/g, "-")) // use state name as ID
        .attr("data-name", (d) => d.properties.NAME_1)
        .on("mouseover", function (event, d) {
            d3.select(this).classed("active", true);
            const listItem = document.querySelector(
                `li[data-state="${d.properties.NAME_1}"]`
            );
            if (listItem) listItem.classList.add("active");
        })
        .on("mouseout", function (event, d) {
            d3.select(this).classed("active", false);
            const listItem = document.querySelector(
                `li[data-state="${d.properties.NAME_1}"]`
            );
            if (listItem) listItem.classList.remove("active");
        });

    // Populate state list
    const stateList = document.getElementById("stateList");
    geojson.features.forEach((feature) => {
        const li = document.createElement("li");
        li.textContent = feature.properties.NAME_1;
        li.setAttribute("data-state", feature.properties.NAME_1);
        li.addEventListener("mouseenter", () => {
            const path = document.getElementById(
                feature.properties.NAME_1.replace(/\s+/g, "-")
            );
            if (path) path.classList.add("active");
        });
        li.addEventListener("mouseleave", () => {
            const path = document.getElementById(
                feature.properties.NAME_1.replace(/\s+/g, "-")
            );
            if (path) path.classList.remove("active");
        });
        stateList.appendChild(li);
    });
});
