<?php

use Illuminate\Database\Seeder;

class TestcasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke1',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration1',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'class' => 'hbs.ee.atlas.TC_AtlasSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 3,
          'application_id' => 3,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'class' => 'hbs.ee.atlas.TC_AtlasSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 3,
          'application_id' => 3,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression1',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke2',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration2',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression2',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke3',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration3',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression3',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke4',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration4',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression4',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke5',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration5',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke1',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke2',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression5',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke3',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_QuickCodesSmoke4',
          'class' => 'hbs.ops.quickcodes.TC_QuickCodesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 6,
          'application_id' => 4,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_AtlasSmoke1',
          'class' => 'hbs.ee.atlas.TC_AtlasSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 3,
          'application_id' => 3,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesSmoke6',
          'class' => 'hbs.mba.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 1,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesIntegration6',
          'class' => 'hbs.mba.grades.TC_GradesIntegration',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 2,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_GradesRegression6',
          'class' => 'hbs.mba.grades.TC_GradesRegression',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 3,
          'group_id' => 3,
          'partner_id' => 1,
          'application_id' => 1,
          'parameters' => 'username=ghalstead@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke1',
          'class' => 'hbs.doc.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 2,
          'application_id' => 2,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke2',
          'class' => 'hbs.doc.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => null,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 1,
          'group_id' => 1,
          'partner_id' => 2,
          'application_id' => 2,
          'parameters' => 'username=cweinberg@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => null,
          'failure_msg' => null
        ]);

        DB::table('testcases')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'TC_DoctoralSmoke3',
          'class' => 'hbs.doc.grades.TC_GradesSmoke',
          'method' => null,
          'tc_number' => 1,
          'start_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'end_date_time' => Carbon\Carbon::now()->toDateTimeString(),
          'status' => 2,
          'group_id' => 1,
          'partner_id' => 2,
          'application_id' => 2,
          'parameters' => 'username=eberntson@hbsstg.org, pwd=423de23dss32, authenticate=yes',
          'messages' => 'no such element found exception.',
          'failure_msg' => 'full stack trace'
        ]);
    }
}
