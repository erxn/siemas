    $(function() {
        var numberInputs = $("input.number");
        var convertToCurrencyDisplayFormat = function(str) {
            var regex = /(-?[0-9]+)([0-9]{3})/;
            str += '';
            while (regex.test(str)) {
                str = str.replace(regex, '$1.$2');
            }
            str += '';
            return str;
        };
        var stripNonNumeric = function(str) {
            str += '';
            str = str.replace(/[^0-9]/g, '');
            return str;
        };
        numberInputs.each(function() {
            this.value = convertToCurrencyDisplayFormat(this.value);
        });
        numberInputs.blur(function() {
            this.value = convertToCurrencyDisplayFormat(this.value);
        });
        numberInputs.focus(function() {
            this.value = stripNonNumeric(this.value);
        });
        $("form").submit(function() {
            numberInputs.each(function() {
                this.value = stripNonNumeric(this.value);
            });
        });

        $('.number').css("text-align", "right");

    });