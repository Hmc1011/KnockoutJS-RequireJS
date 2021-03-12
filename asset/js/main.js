requirejs.config({ 
    baseUrl: 'asset/js/libs', 
    paths: {
        jquery: "jquery",
        knockout: "knockout",
        knockoutTest: "../knockoutTest"
    }, 

    shim: {
        knockoutTest: { 
            deps: [ "knockout" ]
        }
    },
}); 


require(["knockoutTest"]);
