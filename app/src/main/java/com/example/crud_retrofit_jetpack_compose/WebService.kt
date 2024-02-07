package com.example.crud_retrofit_jetpack_compose

import retrofit2.Response
import retrofit2.http.Body
import retrofit2.http.DELETE
import retrofit2.http.GET
import retrofit2.http.POST
import retrofit2.http.PUT
import retrofit2.http.Path
import retrofit2.http.Query

interface WebService {

    @GET("getUsuarios.php")
    suspend fun getUsuarios(): Response<UsuariosResponse>

    @POST("addUsuario.php")
    suspend fun addUsuarios(
        @Body usuario: Usuario
    ): Response<UsuariosResponse>

    @PUT("updateUsuario.php")
    suspend fun updateUsuario(
        @Query("id") id_usuario: String,
        @Body usuario: Usuario
    ): Response<UsuariosResponse>

    @DELETE("deleteUsuario.php")
    suspend fun deleteUsuario(
        @Query("id") id_usuario: String,
    ): Response<UsuariosResponse>
}