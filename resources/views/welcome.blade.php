@extends('layouts.testheader')

@section('title','TestHome')
@section('body')
    @push('style')
        <style>
            #agencyTable,#testTable{
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }
            #agencyTable tr th{
                width: 33%;
            }
            #testTable tr td{
                width: 33%;
            }

        </style>

        @endpush
    <div id="dob" style="margin: 60px"></div>

    <table id="agencyTable">
        <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Contact</th>
        </tr>
    </table>
    <table id="testTable">
        <tr>
            <td>1</td>
            <td>Rabbial Anower</td>
            <td>36541216354</td>
        </tr>
    </table>

        <script>
            let info = {
                dob:[1988,10,28],
                dobStamp: (new Date(1988,10,28)).getTime(),
                todayStamp: (new Date()).getTime(),
                monthStamp:'',
                ageStamp() {
                    return this.todayStamp - this.dobStamp;
                },
                getAge(){
                    return Math.floor(this.ageStamp()/(365*24*60*60*1000))
                },

                getMonth(){
                    var year = this.getAge()*365*24*60*60*1000;
                    var monthStamp = this.ageStamp()- year;
                    return [Math.floor(monthStamp/(30*24*60*60*1000)),monthStamp]
                },
                getDay(){
                    var month = this.getMonth()[0]*30*24*60*60*1000;
                    var day = month - this.getMonth()[1]
                    return Math.floor(day/(24*60*60*1000));
                }


            }

            // document.getElementById('dob').textContent = info.getDay();

        </script>
@endsection
