var country="";var language="";var countryLanguages=[];function TrimString(sInString){if(sInString){sInString=sInString.replace(/^\s+/g,"");return sInString.replace(/\s+$/g,"");}}function populateCountry(idName){var countryLineArray=country.split("|");var selObj=document.getElementById(idName);for(var loop=0;loop<countryLineArray.length;loop++){lineArray=countryLineArray[loop].split(":");countryCode=TrimString(lineArray[0]);countryName=TrimString(lineArray[1]);if(countryCode!=""){selObj.options[loop]=new Option(countryName,countryCode);}}}function populateLanguage(countrySelObj,langSelObj){var countryCode=countrySelObj.options[countrySelObj.selectedIndex].value;var languageArray=countryLanguages[countryCode];var langOptions=langSelObj.options;langOptions.length=0;for(var i=0;i<languageArray.length;i++){langOptions[langOptions.length]=new Option(languageArray[i][1],languageArray[i][0]);}}function initLanguages(){var languageLineArray=language.split("|");for(var loop=0;loop<languageLineArray.length;loop++){lineArray=languageLineArray[loop].split(":");countryCode=TrimString(lineArray[0]);countryLanguagesLine=TrimString(lineArray[1]);countryLanguagesLineArray=countryLanguagesLine.split(";");countryLanguages[countryCode]=[];for(var i=0;i<countryLanguagesLineArray.length;i++){countryLanguages[countryCode][i]=countryLanguagesLineArray[i].split(",");}}}function selectCountry(countryCode,countrySelObj,langSelObj){for(var i=0;i<countrySelObj.options.length;i++){if(countrySelObj.options[i].value==countryCode){countrySelObj.selectedIndex=i;populateLanguage(countrySelObj,langSelObj);}}}