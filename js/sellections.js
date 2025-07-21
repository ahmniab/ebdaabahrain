 /*
   options in forms
   ========================================================================== */
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 1;

                switch (listindex)
                {
                    case "Sayedati" :

                        document.getElementById("subcategory").options[1]=new Option("200","200");
                        document.getElementById("subcategory").options[2]=new Option("400","400");
                        document.getElementById("subcategory").options[3]=new Option("600","600");
                        document.getElementById("subcategory").options[4]=new Option("800","800");
                        document.getElementById("subcategory").options[5]=new Option("1000","1000");
                        break;

                    case "Ebdaa" :

                        document.getElementById("subcategory").options[1]=new Option("200","200");
                        document.getElementById("subcategory").options[2]=new Option("400","400");
						document.getElementById("subcategory").options[3]=new Option("600","600");
						document.getElementById("subcategory").options[4]=new Option("800","800");
						document.getElementById("subcategory").options[5]=new Option("1000","1000");
                        break;
                    case "AlNajah" :

                        document.getElementById("subcategory").options[1]=new Option("600","600");
                        document.getElementById("subcategory").options[2]=new Option("800","800");
                        document.getElementById("subcategory").options[3]=new Option("1000","1000");
                        document.getElementById("subcategory").options[4]=new Option("1200","1200");
                        document.getElementById("subcategory").options[5]=new Option("1400","1400");
                        break;
                    case "AlAmal" :

                        document.getElementById("subcategory").options[1]=new Option("1000","1000");
						document.getElementById("subcategory").options[2]=new Option("1200","1200");
						document.getElementById("subcategory").options[3]=new Option("1400","1400");
						document.getElementById("subcategory").options[4]=new Option("1600","1600");
						document.getElementById("subcategory").options[5]=new Option("1800","1800");
						document.getElementById("subcategory").options[6]=new Option("2000","2000");
                        break;
						case "AlTamayoz" :

                        document.getElementById("subcategory").options[1]=new Option("1500","1500");
						document.getElementById("subcategory").options[2]=new Option("2000","2000");
						document.getElementById("subcategory").options[3]=new Option("3000","3000");
						document.getElementById("subcategory").options[4]=new Option("3500","3500");
						document.getElementById("subcategory").options[5]=new Option("4000","4000");
						document.getElementById("subcategory").options[6]=new Option("4500","4500");
						document.getElementById("subcategory").options[7]=new Option("5000","5000");
                        break;
						case "AlTafawoq" :

                        document.getElementById("subcategory").options[1]=new Option("1000","1000");
						document.getElementById("subcategory").options[2]=new Option("2000","2000");
						document.getElementById("subcategory").options[3]=new Option("3000","3000");
						document.getElementById("subcategory").options[4]=new Option("4000","4000");
						document.getElementById("subcategory").options[5]=new Option("5000","5000");
                        break;
                }
                return true;
            }
