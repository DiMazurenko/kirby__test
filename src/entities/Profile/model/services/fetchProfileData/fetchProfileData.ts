import { type User, userActions } from 'entities/User';
import { USER_LOCALSTORAGE_KEY } from 'shared/const/localstorage';
import { type ThunkConfig } from 'app/providers/StoreProvider';
import { createAsyncThunk } from '@reduxjs/toolkit';
import { type Profile } from 'entities/Profile';

export const fetchProfileData = createAsyncThunk<Profile, void, ThunkConfig<string>>('profile/fetchProfileData',
  async (_, thunkAPI) => {
    try {
      const response = await thunkAPI.extra.api.get <Profile>('/profile');

      return response.data;
    } catch (e) {
      console.log(e);
      return thunkAPI.rejectWithValue('error');
    }
  });
