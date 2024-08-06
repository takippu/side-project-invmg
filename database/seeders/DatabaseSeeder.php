<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $cat1 = [
            'HUB & BRG ASSY-RR WHEEL',
            'AXLE COMPL, RR TORSION',
            'PAD, COIL SPRING LWR',
            'BOLT, FLANGE(12X25)AS-ROLLED',
            'CLIP',
            'PAD, COIL SPRING UPPER',
            'NUT, FLANGE',
            'DRUM, BRAKE',
            'CAP',
            'BRAKE ASSY-RR, LH',
            'BRAKE ASSY-RR,RH',
            'SPR-RR',
            'BOLT, FLANGE (8X16) AS-ROLLED',
            'TUBE ASSY-BRAKE, RR LH',
            'TUBE ASSY-BRAKE, RR RH',
            'HOSE ASSY-BRAKE,LH',
            'HOSE ASSY-BRAKE, RH',
            'BOLT, FLANGE (8X20) ANTI CROSS',
            'BOLT, FLANGE(6X12)AS-ROLLED',
            'HARN ASSY-ANTISKID & PKB,RH',
            'HARN ASSY-ANTISKID & PKB,LH',
        ];
        $cat1partno = [
            '43202W000PV1',
            '4120A266',
            '4140A490',
            'MF911953V',
            'MR129462',
            '4140A491',
            'MB631529',
            '4615A245',
            'MB515405',
            '44010W000P',
            '44000W000P',
            '55019W020P',
            'MF911233V1',
            '46287W000P',
            '46286W000P',
            '46211W060P',
            '46210W050P',
            'MF911242V1',
            'MF911142V1',
            '479A6W000P',
            '479A7W000P'
        ];
        $cat2 = [
            'PAD, SPRING LOWER',
            'STOPPER, F/SUSP BUMP',
            'PAD, SPRING UPPER',
            'SEAT, SPRING UPPER',
            'INSULATOR ASSY-STRUT MTG',
            'NUT, PREVAILING TORQUE, FLAG (12)',
            'BEARING, STRUT SUPPORT',
            'STRUT ASSY-FR SUSP,RH',
            'STRUT ASSY-FR SUSP,LH',
            'SPR-FR'
        ];
        $cat3 = [
            'PAD, SPRING LOWER',
            'STOPPER, F/SUSP BUMP',
            'PAD, SPRING UPPER',
            'SEAT, SPRING UPPER',
            'INSULATOR ASSY-STRUT MTG',
            'NUT, PREVAILING TORQUE, FLAG (12)',
            'BEARING, STRUT SUPPORT',
            'STRUT ASSY-FR SUSP,RH',
            'STRUT ASSY-FR SUSP,LH',
            'SPR-FR'
        ];
        $cat4 = [
            'C/MBR ASSY,FR SUSPENSION',
            'ARM COMPL,LOWER (LH)',
            'ARM COMPL,LOWER (RH)',
            'NUT FLANGE',
            'NUT FLANGE (14)',
            'GEAR & LNKG ASSY-STRG',
            'BAR,STABILIZER FR',
            'BUSHING,STAB BAR(FOR D21 STAB)',
            'CLAMP,STABILIZER',
            'LINK ASSY,STABILIZER',
            'NUT,WASHER ASSEMBLED (10)',
            'ROD ASSY, ENG ROLL',
            'COVER,STRG SHAFT JNT DUST   RH',
            'AXLE ASSY,FRONT (LH)',
            'AXLE ASSY,FRONT (RH)',
            'HOSE,BRAKE (LH)',
            'HOSE,BRAKE (RH)',
            'GASKET',
            'BOLT,CONNECTOR',
            'BASE ENGINE ASSY (4A91-4-30)',
            'BUSHING,KNOCK (8X16)',
            'BOLT,SPECIAL',
            'COVER',
            'STARTER ASSY',
            'COMPRESSOR & CLUTH ASSY,A/C',
            'BOLT,FLANGE (8X110)',
            'BRKT ASSY,T/M MOUNT',
            'BRKT,CONT CABLE',
            'CLIP',
            'BRKT, HARNESS B',
            'BRKT,CORRUGATE CLAMP',
            'BRKT,A/T CONT.CABLE',
            'BRKT ASSY,ADAPTER',
            'TUBE ASSY,OIL COOLER',
            'BOLT',
            'BOLT,FLANGE-M8',
            'BELT,V-RIBBED',
            'NUT,FLANGE (8)',
            'PIPE,ASSY VACUUM',
            'CLIP,HOSE',
            'HOSE ASSY,PURGE',
            'CHAMBER',
            'HOSE ASSY,AIR BREATHER',
            'BALL,STUD',
            'CAP,TERMINAL',
            'CLIP,HOSE',
            'CLIP,HOSE',
            'HOSE,FEED,A/T',
            'CLIP,HOSE',
            'HOSE,VACUUM',
            'CLIP,HOSE',
            'HOSE,AIR INTAKE',
            'CLAMP,HOSE (65)',
            'STAY,ROLL ROD',
            'STUD',
            'GASKET,EXH MANIFOLD',
            'COLUMNAROOROOF RADIATOR OAS ',
            'COLUMNAROOFLANGE'
        ];
        $cat5 = [
            'PANEL,ROOF',
            'BOW,ROOF,CTR',
            'BOW,ROOF,A',
            'BOW,ROOF,C',
            'BOW,ROOF,D',
            'BOW,ROOF,B'
        ];
        $cat6 = [
            'RAIL,ROOF,FR',
            'EXT,FR ROOF RAIL LH',
            'EXT,FR ROOF RAIL RH',
            'BRKT,HOLDER (2U)',
            'BRKT,MAPLAMP'
        ];
        $cat7 = [
            'PAN,RR FLOOR',
            'EXT,ASSY RR FLOOR',
            'REINF,2ND SEAT STRIKER,INR',
            'REINF ASSY,3RD SEAT BELT, CTR',
            'BRKT,3RD SEAT,SIDE FR LH',
            'BRKT,3RD SEAT,SIDE FR RH',
            'BRKT,3RD SEAT,SIDE RR LH',
            'BRKT,3RD SEAT,SIDE RR RH',
            'S/MBR ASSY RR FLR RH',
            'C/MBR ASSY R /FLR (A)',
            'C/MBR ASSY R /FLR (B)',
            'C/MBR ASSY R/FLR END',
            'C/MBR ASSY RR SEAT',
            'BRKT SPARE TYRE',
            'PANEL ASSY RR END',
            'S/MBR ASSY,RR FLOOR LH',
            'C/MBR,R/FLR (C)',
            'BRKT ASSY,RR SHIPPING HOOK'
        ];
        $cat8 = [
            'C/MBR ASSY,B/BONE',
            'PANEL,BACKBONE',
            'REINF,BACKBONE LWR',
            'REINF ASSY,BACKBONE',
            'PAN,F/FLR SIDE LH',
            'PAN,F/FLR SIDE RH',
            'BRKT,BRAKE TUBE',
            'C/MBR ASSY,F/FLR FR LH',
            'C/MBR ASSY,F/FLR FR RH',
            'BRKT ASSY,FR SEAT SIDE,RR   LH',
            'BRKT ASSY,FR SEAT SIDE,RR   RH',
            'REINF ASSY,FR S/MBR,RR UPR  LH',
            'REINF ASSY,FR S/MBR,RR UPR  RH',
            'STUD,BOLT(M6X20)'
        ];
        $cat9 = [
            'PANEL,DASH (RHD,AT)',
            'BRKT,STEERING SHAFT RHD',
            'REINF ASSY,BRAKE RHD',
            'BRACE,DASH SIDE LH',
            'BRACE,DASH SIDE RH',
            'BRKT ASSY,CANISTER',
            'BRKT ASSY,DECK C/MBR STAY',
            'BRKT,ACCEL PEDAL RHD',
            'BOLT,WELD,PILOT (8XL)',
            'STUD,WELD(M6X25)',
            'STUD,BOLT(M6X20)',
            'PANEL ASSY COWL TOP RHD',
            'S/MBR,FR FLOOR',
            'S/MBR ASSY,FR,RR LH',
            'S/MBR,FR,RR(B)',
            'SHIELD ASSY,FR FENDER LH',
            'S/MBR ASSY,FR,RR  RH',
            'SHIELD ASSY,FR FENDER RH',
            'C.MBR ASSY FR END LWR',
            'C/MBR,DASH',
            'BOLT FLANGE (8X16)AS-ROLLED',
            'S/MBR ASSY,FR,FR LH',
            'S/MBR ASSY,FR,FR  RH',
            'PANEL ASSY, H/LP SUPPORT LH',
            'PANEL ASSY, H/LP SUPPORT RH',
            'C/MBR ASSY,FR END CTR',
            'BOLT,FLANGE(10X20)AS-ROLLED'
        ];
        $cat10 = [
            'PANEL,QTR INR LWR RH',
            'REINF,2ND S/BELT,LWR RH',
            'REINF,3RD S/BELT,LWR RH',
            'PANEL ASSY,QTR INR LWR,FR RH',
            'BRKT',
            'PANEL ASSY,QTR INR UPR RH',
            'PILLAR ASSY,GATE INR RH',
            'PANEL ASSY,RR W/HSE INR RH',
            'BRACE ASSY,R/FLR SIDE RH',
            'REINF ASSY,GATE PILLAR RH',
            'REINF ASSY,RR PILLAR RH',
            'PLATE,NUT',
            'DEADENING PAD(D)',
            'PILLAR ASSY,FR INR,UPR RH',
            'RAIL,ROOF SIDE INR RH',
            'PILLAR ASSY,CTR INR RH',
            'REINF ASSY,SIDE SILL RH',
            'REINF ASSY,CTR PILLAR RH',
            'REINF,FR PILLAR UPR RH',
            'REINF ASSY,FR PILLAR,LWR RH / SPRING,GAS T/GATE RH',
            'DEADENING PAD(B)',
            'PANEL,SIDE OTR RH',
            'PANEL ASSY,QTR OTR,EXT RH',
            'BRKT,FR FENDER (4U)',
            'DEADENING PAD A',
            'DEADENING PAD C',
            'DEADENING PAD E',
            'STIFFENER RH',
            'STIFFENER'
        ];
        $cat11 = [
            'PANEL,QTR INR LWR LH',
            'REINF,2ND S/BELT,LWR LH',
            'REINF,3RD S/BELT,LWR LH',
            'PANEL ASSY,QTR INR LWR,FR LH',
            'BRKT',
            'PANEL ASSY,QTR INR UPR LH',
            'PILLAR ASSY,GATE INR LH',
            'PANEL ASSY,RR W/HSE INR LH',
            'BRACE,R/FLR SIDE LH',
            'REINF ASSY,GATE PILLAR LH',
            'REINF ASSY,RR PILLAR LH',
            'PLATE,NUT',
            'DEADENING PAD(D)',
            'PILLAR ASSY,FR INR,UPR LH',
            'RAIL,ROOF SIDE INR LH',
            'PILLAR ASSY,CTR INR LH',
            'REINF ASSY,SIDE SILL LH',
            'REINF ASSY,CTR PILLAR LH',
            'REINF,FR PILLAR UPR LH',
            'REINF ASSY,FR PILLAR LWR LH',
            'DEADENING PAD(B)',
            'PANEL,SIDE OTR LH',
            'PANEL ASSY,QTR OTR,EXT LH',
            'BRKT,FILLER NECK',
            'BRKT,FR FENDER (4U)',
            'DEADENING PAD A',
            'DEADENING PAD C',
            'DEADENING PAD E',
            'STIFFENER LH'
        ];
        $cat12 = [
            'FIN-CLUSTER LID,C',
            'BOLT,THREAD FORMING',
            'BRKT,GUIDE',
            'BRKT,I/PNL',
            'C/MBR ASSY,FR DECK (RHD)',
            'LOCK,STEERING HANDL',
            'RELAY, POWER(MICRO ISO)',
            'SUB HARNESS,EPS RHD',
            'BOLT,FLANGE (8X25) ANTI CROSS',
            'AIR BAG MODULE,P/SIDE (BLACK)',
            'BOLT,FLANGE(EARTH)(6X16)TAPERED',
            'BOLT,FLG,W/WA(10X80)TAPERED',
            'BOLT,W/WA(6X16)ANTI CROSS',
            'BOLT,WASHER ASSEMBLED(35)',
            'CONTROL UNIT,KOS',
            'CONTROL UNIT,TIME & ALARM',
            'HARNESS,I/PNL(RHD)',
            'NUT,FLANGE (6)',
            'PANEL ASSY,INSTRUMENT R(BLACK)',
            'FIN-CLUSTER LID,B',
            'SCREW,TAPPING',
            'SCREW,TAPPING',
            'COL-COMPL- STRG',
            'SWITCH, METER MODE',
            'SCREW,TAPPING (5X16)'
        ];
        $cat13 = [
            'CHECK LINK ASSY-FR DOOR',
            'REG COMPL-FR DOOR,LH',
            'SCREW,TAPPING (5X16)',
            'BASE ASSY,OUTSIDE HANDLE LH',
            'BOLT,WASHER ASSEMBLED(6X12)',
            'BRKT,PULL HANDLE FR',
            'COVER,OUTSIDE HANDLE LH',
            'FILM,F/DR WATERPROOF LH',
            'GLASS ASSY,F/DR WINDOW LH',
            'GLASS,F/DR STATIONARY WDO LH',
            'GROMMET,SCREW',
            'GROMMET,SCREW (6)',
            'HANDLE,DR OUTSIDE LH',
            'MIRROR ASSY,DOOR LH',
            'MOULDING,F/DR BELTLINE OTR LH',
            'NUT,WASHER ASSEMBLED (6)',
            'NUT,WASHER ASSEMBLED',
            'PAD,OUTSIDE HANDLE,FR LH',
            'PLUG',
            'PLUG',
            'PLUG',
            'RUNCHANNEL,F/DR WDO GLASS LH',
            'RUNCHANNEL,F/DR WDO GLASS LWR',
            'SASH COMPL-FR DOOR PTN,LH',
            'SASH ASSY,F/DR WDO RR LWR LH',
            'SCREW,MACHINE(6.0X12)',
            'SPEAKER(16CM)',
            'W/STRIP,F/DR OPENING OTR LH',
            'WSTRIP-FR DOOR PTN GLASS,LH',
            'MIRROR COVER LH',
            'DOOR ASSY-FR,LH',
            'BOLT,FLANGE(6X12)AS-ROLLED',
            'BOLT,FLANGE(6X8)AS-ROLLED',
            'BOLT,WASHER ASSEMBLED (6X16)',
            'BUMPER',
            'CAP,I/S HANDLE (BLACK)LH',
            'HARNESS,FR DOOR(AS)',
            'SCREW,MACHINE (5X8)',
            'SCREW,TAPPING (6X14)',
            'SCREW,TAPPING (4X20)',
            'SCREW,TAPPING (5X16)',
            'TRIM ASSY,FR DO(BLACK-BROWN) LH',
            'LOCK & RC ASSY-FR DO',
            'PAD,OUTSIDE HANDLE,RR LH'
        ];
        $cat14 = [
            'BASE ASSY,OUTSIDE HANDLE RH',
            'BRKT,PULL HANDLE FR',
            'COVER,OUTSIDE HANDLE RH',
            'FILM,F/DR WATERPROOF RH',
            'GLASS ASSY,F/DR WINDOW RH',
            'GLASS,F/DR STATIONARY WDO RH',
            'GROMMET,SCREW',
            'GROMMET,SCREW (6)',
            'HANDLE,DR OUTSIDE RH',
            'KEY SET',
            'LATCH ASSY,F/DR RH',
            'MIRROR ASSY,DOOR RH',
            'MOULDING,F/DR BELTLINE OTR RH',
            'NUT,WASHER ASSEMBLED',
            'NUT,WASHER ASSEMBLED (6)',
            'PAD,OUTSIDE HANDLE,FR RH',
            'PLUG',
            'PLUG',
            'PLUG',
            'RUNCHANNEL,F/DR WDO GLASS RH',
            'RUNCHANNEL,F/DR WDO GLASS LWR',
            'SASH COMPL-FR DOOR PTN,RH',
            'SASH ASSY,F/DR WDO RR LWR RH',
            'SCREW,MACHINE(6.0X12)',
            'SPEAKER(16CM)',
            'W/STRIP,F/DR OPENING OTR RH',
            'WSTRIP-FR DOOR PTN GLASS,RH',
            'PANEL ASSY,FR DOOR RH',
            'BOLT,FLANGE(6X12)AS-ROLLED',
            'BOLT,FLANGE(6X8)AS-ROLLED',
            'BOLT,WASHER ASSEMBLED (6X16)',
            'BOLT,WASHER ASSEMBLED(6X12)',
            'BUMPER',
            'CAP,I/S HANDLE (BLACK)RH',
            'SCREW,MACHINE (5X8)',
            'SCREW,TAPPING (4X20)',
            'SCREW,TAPPING (5X16)',
            'SCREW,TAPPING (6X14)',
            'TRIM ASSY,FR DO(BLACK-BROWN)RH',
            'MIRROR COVER RH',
            'CHECK LINK ASSY-FR DOOR',
            'REG COMPL-FR DOOR,RH',
            'HARNESS,FR DOOR',
            'PAD,OUTSIDE HANDLE,RR RH'
        ];
        $cat15 = [
            'CHECK,RR DOOR',
            'PAD,OUTSIDE HANDLE,FR LH',
            'REG COMPL-RR DOOR,LH',
            'BASE ASSY,OUTSIDE HANDLE LH',
            'BOLT,WASHER ASSEMBLED(6X12)',
            'BRKT,PULL HANDLE FR',
            'COVER,OUTSIDE HANDLE LH',
            'FILM,R/DR WATERPROOF LH',
            'GLASS ASSY,R/DR WINDOW LH',
            'GROMMET,SCREW',
            'GROMMET,SCREW (6)',
            'HANDLE,DR OUTSIDE   (CHROME)LH',
            'MOULDING,R/DR BELTLINE OTR LH',
            'NUT,WASHER ASSEMBLED',
            'PLUG',
            'PLUG',
            'RUNCHANNEL,R/DR WDO GLASS LH',
            'RUNCHANNEL,R/DR WDO GLASS LWR',
            'SASH ASSY,R/DR WDO RR LWR LH',
            'SCREW,MACHINE(6.0X12)',
            'SPEAKER(16CM)',
            'W/STRIP,R/DR OPENING OTR LH',
            'SCREW,TAPPING (5X16)',
            'PANEL ASSY,RR DOOR LH',
            'BOLT,FLANGE(6X12)AS-ROLLED',
            'BOLT,FLANGE(6X8)AS-ROLLED',
            'BOLT,WASHER ASSEMBLED (6X16)',
            'BUMPER',
            'CAP,I/S HANDLE (BLACK) LH',
            'HARNESS,RR DOOR LH',
            'SCREW,TAPPING (4X20)',
            'SCREW,TAPPING (6X14)',
            'TRIM ASSY,RR DO(BLACK-BROWN) LH',
            'LOCK & RC ASSY-RR DO',
            'PAD,OUTSIDE HANDLE,RR LH'
        ];
        $cat16 = [
        'PAD, OUTSIDE HANDLE, FR RH',
        'CHECK, RR DOOR',
        'BASE ASSY, OUTSIDE HANDLE RH',
        'BOLT, WASHER ASSEMBLED (6X12)',
        'BRKT, PULL HANDLE FR',
        'COVER, OUTSIDE HANDLE RH',
        'FILM, R/DR WATERPROOF RH',
        'GLASS ASSY, R/DR WINDOW RH',
        'GROMMET, SCREW',
        'GROMMET, SCREW (6)',
        'HANDLE, DR OUTSIDE RH',
        'HARNESS, RR DOOR RH',
        'MOULDING, R/DR BELTLINE OTR  RH',
        'NUT, WASHER ASSEMBLED',
        'PLUG',
        'PLUG',
        'RUNCHANNEL, R/DR WDO GLASS   RH',
        'RUNCHANNEL, R/DR WDO GLASS LWR',
        'SASH ASSY, R/DR WDO RR LWR   RH',
        'SCREW, MACHINE (6.0X12)',
        'SPEAKER (16CM)',
        'W/STRIP, R/DR OPENING OTR RH',
        'PAD, OUTSIDE HANDLE, RR  RH',
        'PANEL ASSY, RR DOOR  RH',
        'BOLT, FLANGE (6X12)AS-ROLLED',
        'BOLT, FLANGE (6X8)AS-ROLLED',
        'BOLT, WASHER ASSEMBLED (6X16)',
        'BUMPER',
        'CAP, I/S HANDLE (BLACK)RH',
        'SCREW, TAPPING (4X20)',
        'SCREW, TAPPING (5X16)',
        'SCREW, TAPPING (6X14)',
        'TRIM ASSY, RR DO (BLACK-BROWN)RH',
        'LOCK & RC ASSY-RR DO',
        'REG COMPL-RR DOOR,RH'
        ];
        $cat17 = [
            'BRKT ASSY',
            'BRKT ASSY,ASC H/U',
            'CONNECTOR ASSY',
            'CLIP',
            'CLIP',
            'CLIP',
            'CLIP',
            'BOLT',
            'TUBE,BRAKE(MS)',
            'TUBE,BRAKE(CL)',
            'TUBE,BRAKE(CR)',
            'TUBE,BRAKE(FL)',
            'TUBE,BRAKE(MP)',
            'HYDRAULIC UNIT ASSY,ASC'
        ];
        $cat18 = [
            'TANK ASSY,CONDENSER',
            'PIN,SNAP',
            'INSULATOR,LWR',
            'CONDENSER ASSY',
            'SCREW, TAPPING (6X12)',
            'RADIATOR COMPL',
            'HOSE (310)'
        ];
        DB::table('rr_crossmembers')->insert(
            array_map(function ($cat1, $cat1partno) {
                return [
                    'subcategory' => $cat1,
                    'part_number' => $cat1partno
                ];
            }, $cat1, $cat1partno)
        );
        
        // DB::table('fr_strut_rhs')->insert(
        //     array_map(function ($cat2) {
        //         return ['subcategory' => $cat2];
        //     }, $cat2)
        // );
        // DB::table('fr_strut_lhs')->insert(
        //     array_map(function ($cat3) {
        //         return ['subcategory' => $cat3];
        //     }, $cat3)
        // );
        // DB::table('fr_drivetrain_assies')->insert(
        //     array_map(function ($cat4) {
        //         return ['subcategory' => $cat4];
        //     }, $cat4)
        // );
        // DB::table('roof_assies')->insert(
        //     array_map(function ($cat5) {
        //         return ['subcategory' => $cat5];
        //     }, $cat5)
        // );
        // DB::table('roof_rail_assies')->insert(
        //     array_map(function ($cat6) {
        //         return ['subcategory' => $cat6];
        //     }, $cat6)
        // );
        // DB::table('rear_floor_assies')->insert(
        //     array_map(function ($cat7) {
        //         return ['subcategory' => $cat7];
        //     }, $cat7)
        // );
        // DB::table('front_floor_assies')->insert(
        //     array_map(function ($cat8) {
        //         return ['subcategory' => $cat8];
        //     }, $cat8)
        // );
        // DB::table('engine_room_assies')->insert(
        //     array_map(function ($cat9) {
        //         return ['subcategory' => $cat9];
        //     }, $cat9)
        // );
        // DB::table('side_body_rhs')->insert(
        //     array_map(function ($cat10) {
        //         return ['subcategory' => $cat10];
        //     }, $cat10)
        // );
        // DB::table('side_body_lhs')->insert(
        //     array_map(function ($cat11) {
        //         return ['subcategory' => $cat11];
        //     }, $cat11)
        // );
        // DB::table('ipnl_assies')->insert(
        //     array_map(function ($cat12) {
        //         return ['subcategory' => $cat12];
        //     }, $cat12)
        // );
        // DB::table('fr_door_assy_lhs')->insert(
        //     array_map(function ($cat13) {
        //         return ['subcategory' => $cat13];
        //     }, $cat13)
        // );
        // DB::table('fr_door_assy_rhs')->insert(
        //     array_map(function ($cat14) {
        //         return ['subcategory' => $cat14];
        //     }, $cat14)
        // );
        // DB::table('rear_door_assy_lhs')->insert(
        //     array_map(function ($cat15) {
        //         return ['subcategory' => $cat15];
        //     }, $cat15)
        // );
        // DB::table('rear_door_assy_rhs')->insert(
        //     array_map(function ($cat16) {
        //         return ['subcategory' => $cat16];
        //     }, $cat16)
        // );
        // DB::table('hydraulic_unit_assies')->insert(
        //     array_map(function ($cat17) {
        //         return ['subcategory' => $cat17];
        //     }, $cat17)
        // );
        // DB::table('radiator_assies')->insert(
        //     array_map(function ($cat18) {
        //         return ['subcategory' => $cat18];
        //     }, $cat18)
        // );


    }
}
