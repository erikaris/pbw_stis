<html>

<head></head>

<body>
    <div>
        <label>Pilih Provinsi</label>
        <select id="kdprov" onchange="onProvChange()"></select>
    </div>
    <div>
        <label>Pilih Kabupaten</label>
        <select id="kdkab" onchange="onKabChange()"></select>
    </div>

    <table id="result"></table>

    <script>
        // Fetch options of kdprov
        const xhrProv = new XMLHttpRequest();
        xhrProv.onload = (e) => {
            const provs = JSON.parse(xhrProv.responseText); // ini hasilnya array
            var innerHTML = "<option value=''>-- Pilih Provinsi --</option>";
            provs.forEach(prov => {
                innerHTML += "<option value='" + prov.kode + "'>" + prov.nama + "</option>";
            });

            document.querySelector("#kdprov").innerHTML = innerHTML;
        }
        xhrProv.open("GET", "prov.php");
        xhrProv.send();

        function onProvChange () {
            const kdprov = document.querySelector("#kdprov").value;
            if (kdprov) {
                // fetch data for dropdown kab
                const xhrKab = new XMLHttpRequest();
                xhrKab.onload = (e) => {
                    const kabs = Object.values(JSON.parse(xhrKab.responseText)); // ini hasilnya array
                    var innerHTML = "<option value=''>-- Pilih Kabupaten --</option>";
                    kabs.forEach(kab => {
                        innerHTML += "<option value='" + kab.kode + "'>" + kab.nama + "</option>";
                    });

                    document.querySelector("#kdkab").innerHTML = innerHTML;
                }
                xhrKab.open("GET", "kab.php?kdprov=" + kdprov);
                xhrKab.send();
            }
        }

        function onKabChange () {
            const kdprov = document.querySelector("#kdprov").value;
            const kdkab = document.querySelector("#kdkab").value;
            if (kdprov && kdkab) {
                    // fetch data for table
                    const xhrTable = new XMLHttpRequest();
                    xhrTable.onload = (e) => {
                        const data = Object.values(JSON.parse(xhrTable.responseText)); // ini hasilnya array

                        let innerHTML = "";
                        data.forEach(kab => {
                            innerHTML += "<tr><td>" + kab.nip + "</td><td>" + kab.nama + "</td></tr>";
                        });

                        document.querySelector("#result").innerHTML = innerHTML;
                    }
                    xhrTable.open("GET", "data.php?kdprov=" + kdprov + "&kdkab=" + kdkab);
                    xhrTable.send();
                }
        }
    </script>
</body>

</html>