<?php
/**
 *doctorweb
 *ASUS
 *3/16/2022
 *2:10 AM
 *SRILANKA-AXCITO
 */

namespace App\ServiceInterface;

interface PatientServiceInterface
{
    /**
     * @param $inputData
     * @return mixed
     */
    public function register($inputData): mixed;

    /**
     * @param $request
     * @return mixed
     */
    public function getAllPatient($request): mixed;

    /**
     * @param $mobile_number
     * @return mixed
     */
    public function getPatientByPhone($mobile_number):mixed ;

    /**
     * @param array $patientDetails
     * @param array $medicalRatio
     * @param array $technologyLiteracy
     * @param array $goal
     * @return mixed
     */

    public function addNewPatient(array $patientDetails, array $medicalRatio, array $technologyLiteracy, array $goal): mixed;

    /**
     * @param $mobile_number
     * @return mixed
     */

    public function removePatient($mobile_number): mixed;

    /**
     * @param $patientDetails
     * @param $medicalRatio
     * @param $technologyLiteracy
     * @param $goal
     * @return mixed
     */

    public function updatePatient($patientDetails,$medicalRatio,$technologyLiteracy,$goal): mixed;

    /**
     * @param $mobile_number
     * @return mixed
     */

    public function getPatientDetails($mobile_number): mixed;

    /**
     * @param $request
     * @return mixed
     */

    public function addPatientDailyStatus($request): mixed;

    /**
     * @param $request
     * @return mixed
     */

    public function getPatientDailyStatus($request): mixed;

    /**
     * @param $goalData
     * @return mixed
     */

    public function addWeightLoseGoalDetails($goalData): mixed;

    public function getWeightLoseGoalDetailsByMobileNumber($mobile_number);

    public function addDoctorRecommendation($data);

    public function getPreviousRecommendationByMobileNumber($mobile_number);

    /**
     * @param $mobile_number
     * @return mixed
     */

    public function getDailyStatus($mobile_number): mixed;

    public function editPatientByMobileNumber($data);

}
