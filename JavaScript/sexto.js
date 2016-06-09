//------ While / Do-

sum = 5;
resul = 1;
i = 0;

while(i <= sum){
	resul += i;
	i++;
	if (resul >= 20) {
		break;
	}
	alert(resul);
}

//------------------------------
do {
	resul *= sum;
	sum--;
} while(sum > 0);

alert(resul);
