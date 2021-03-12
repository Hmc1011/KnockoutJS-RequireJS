var vm={
    text: ko.observable('HELLO WORD'),
    array: ko.observableArray(),
    change: ()=>{
       vm.array.push(vm.text())
      }
    }
    ko.applyBindings(vm)