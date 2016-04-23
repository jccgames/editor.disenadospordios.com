ENCODEHTML = function(str){
	var rep = str.replace('á','&aacute;').replace('Á','&Aacute;');
	return rep;

};