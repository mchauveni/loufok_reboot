<?php

class ApiController {
    /**
     * Renvoie les données de toutes les Loufokeries
     * route : api/loufokeries
     * @method GET
     */
    public static function allLoufokeries() {
        try {
            $loufokeries = LoufokerieModel::getInstance()->findAll();
            foreach ($loufokeries as $loufokerie) {
                $response[] = $loufokerie;
            }

            ApiController::sendData($response);
            exit;
        } catch (PDOException $e) {
            // Handle responsebase connection errors
            http_response_code(500);
            echo 'Internal Server Error';
            exit;
        }
    }

    /**
     * route : api/loufokerie/{id}
     * @param int $id 
     * @method GET
     */
    public static function loufokerie(int $id) {
        try {
            $response = [];
            if (LoufokerieModel::getInstance()->exists($id)) {
                $response += LoufokerieModel::getInstance()->find($id);
                $response["joueurs"] = JoueurModel::getInstance()->GetAllNamesFromLoufokerie($id);
                $response["contributions"] = ContributionModel::getInstance()->getArrayFullOfEmptyStringsExceptItsNotEmpty($id);
            } else {
                http_response_code(404);
                $response = [
                    "status" => 404,
                    "message" => "No Loufokerie found for this ID"
                ];
            }

            ApiController::sendData($response);
            exit;
        } catch (PDOException $e) {
            // Handle responsebase connection errors
            http_response_code(500);
            echo 'Internal Server Error';
            exit;
        }
    }

    /**
     * Modifie les likes : ajoute ou retire un like
     * route : api/like
     * @method POST
     * @param int $id id du cadavre à modifier
     * @param bool $addLike true si il faut ajouter un like, false sinon
     */
    public static function like() {
        try {
            $queryBody = json_decode(file_get_contents("php://input"));

            if (!isset($queryBody->id) || !isset($queryBody->addLike)) {
                http_response_code(400);
                $response = [
                    "message" => "Missing informations"
                ];
            }

            if (LoufokerieModel::getInstance()->exists($queryBody->id)) {
                $nb_jaime = LoufokerieModel::getInstance()->getLikes($queryBody->id);

                $nb_jaime = $queryBody->addLike ? $nb_jaime + 1 : $nb_jaime - 1;

                LoufokerieModel::getInstance()->update($queryBody->id, ["nb_jaime" => $nb_jaime]);

                if ($queryBody->addLike) {
                    $response = [
                        "message" => "Like added successfully"
                    ];
                } else {
                    $response = [
                        "message" => "Like removed successfully"
                    ];
                }
            } else {
                http_response_code(404);

                $response = [
                    "message" => "No Loufokerie found for this ID"
                ];
            }

            ApiController::sendData($response);
            exit;
        } catch (PDOException $e) {
            // Handle responsebase connection errors
            http_response_code(500);
            $response = [
                "message" => $e
            ];
            echo json_encode($response);
            exit;
        }
    }

    private static function sendData($data) {
        $data = json_encode($data);
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Content-Type, Accept');
        echo $data;
    }
};
