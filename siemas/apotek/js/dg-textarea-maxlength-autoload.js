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

var TAidCounter = 0;
function getUniqueId() {
	TAidCounter++;
	return ('dg-ta-maxlength-' + TAidCounter);
}
window.addEvent('domready', function() {
    var ta = $$('textarea');

	var countTa = ta.length;
	for(i=0;i<countTa;i++) {
		if(ta[i].getProperty('maxLength')) {
			if(!ta[i].id) {
				ta[i].id = getUniqueId();
			}
			new DG.TextareaMaxlength( {
				el : ta[i].id
			});
		}
	}
});

