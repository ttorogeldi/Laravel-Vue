<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
</head>
<body>
<div id="app">
    <div>
        <div>
            <v-container>
                <v-row>
                    <v-col>
                        q2er
                    </v-col>

                    <v-col>
                        q2erwqe
                    </v-col>
                </v-row>
            </v-container>
            <example-component/>
        </div>
        <router-view/>
    </div>
</div>
<script src="./js/app.js"></script>
</body>
</html>
<script>
    import ExampleComponent from "../js/components/ExampleComponent";

    export default {
        components: {ExampleComponent}
    }
</script>
