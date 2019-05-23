#include<math.h>
#include<stdio.h>
#include<string.h>

int main()
{
   
    int n,i,flag=1;
    scanf("%d",&n);
    if(n<=0)
    {
        printf("input should be greater than 0");
    }
    else if(n==1)
    {
        printf("no");
    }
    else
    {
    for(i=2;i<n/2;++i)
    {
        if(n%i==0)
        {
            flag=0;
            printf("no");
            return 0;
        }
        else
        {
            flag=flag+1;
        }
    }
    if(flag>0)
    {
        printf("yes");
    }
    else
    {
        printf("no");
    }
    }
    return 0;
}
