let fonctionTest = () => {
    fetch("./example.json")
        .then((response) => response.json())
        .then(
            (json) =>
                (document.getElementById("longitude").innerHTML =
                    json["longitude"])
        );
};
fonctionTest();
