/************************************************************************************************************
Textarea maxlength
Copyright (C) August 2010  DTHMLGoodies.com, Alf Magne Kalleland

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA

Dhtmlgoodies.com., hereby disclaims all copyright interest in this script
written by Alf Magne Kalleland.

Alf Magne Kalleland, 2010
Owner of DHTMLgoodies.com

************************************************************************************************************/


$extend(Element.NativeEvents, {
        'paste': 2, 'input': 2
    });
    Element.Events.paste = {
        base : (Browser.Engine.presto || (Browser.Engine.gecko && Browser.Engine.version < 19)) ? 'input' : 'paste',
        condition: function(e){
            return this.fireEvent('paste', e, 1);
        }
    };



if(!window.DG) {
	window.DG = {};
};



DG.TextareaMaxlength = new Class( {
	config: {
		html: {
			el : null,
			statusEl : null
		},
		maxlength : 100000,
		currentValue : '',
		statusText : '{0}/{1}' // {0} = Current number of characters, {1} = Maxlength
	},
	initialize : function(config) {
		this.config.html.el = config.el;

		this.config.maxlength = config.maxLength ? config.maxLength : $(config.el).getProperty('maxLength')/1;

		if(config.statusText) {
			this.config.statusText = config.statusText;
		}
		if(config.statusEl) {
			this.config.html.statusEl = config.statusEl;
		}else{
			var elId = $(this.config.html.el).id;
			if($(elId + '-maxlength-status')) {
				console.info('status el exists');
				this.config.html.statusEl = elId + '-maxlength-status';
			}
		}
		this._setCurrentValue();
		this.addEvents();
		this.updateStatus();
	},
	addEvents : function() {
		var el = $(this.config.html.el);
		el.addEvent('keydown', this._validateKeyStroke.bind(this));
		el.addEvent('keyup', this._setCurrentValue.bind(this));
		el.addEvent('keyup', this.updateStatus.bind(this));
		el.addEvent('blur', this.updateStatus.bind(this));
		el.addEvent('click', this.updateStatus.bind(this));
		el.addEvent('paste', this._validatePaste.bind(this));
	},
	_isMaxLengthExceeded : function() {
		return $(this.config.html.el).value.length > this.config.maxlength;
	},

	_validatePaste : function() {
		console.info($(this.config.html.el).value.length + ',' + this.config.maxlength);
		if($(this.config.html.el).value.length >= this.config.maxlength){
			return false;
		}
		this.updateStatus();
		return true;
	},

	_validateKeyStroke : function(e) {

		var validKeys = ['backspace', 'left', 'right', 'up', 'down' ,'tab', 'delete', 'enter'];
		if(validKeys.indexOf(e.key)>=0) {
			return true;
		}
		if(e.control && (e.key == 'x' || e.key=='c' || e.key=='v' || e.key =='y' || e.key =='z' || e.key=='a')) {
			return true;
		}

		if($(this.config.html.el).getSelectedText().length > 0) {
			return true;
		}

		if($(this.config.html.el).value.length >= this.config.maxlength){
			return false;
		}
		return true;
	},

	_setCurrentValue : function() {
		this.config.currentValue = $(this.config.html.el).value;
	},

	updateStatus : function(delayedCall) {
		if(this._isMaxLengthExceeded()) {
			$(this.config.html.el).value = $(this.config.html.el).value.substring(0,this.config.maxlength);
		}

		if(this.config.html.statusEl) {

			var newStatus = this.config.statusText;
			newStatus = newStatus.replace('{0}', $(this.config.html.el).value.length);
			newStatus = newStatus.replace('{1}', this.config.maxlength);
			$(this.config.html.statusEl).set('html', newStatus)
		}

		if(!delayedCall) {
			this.updateStatus.delay(50, this, true);
		}
	}
});

